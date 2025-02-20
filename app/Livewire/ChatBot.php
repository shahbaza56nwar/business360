<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\OpenAIService;

class ChatBot extends Component
{
    public $message;
    public $responses = [];
    public $context = [];

    protected $rules = [
        'message' => 'required|string|min:1',
    ];

    public function sendMessage(OpenAIService $openAIService)
    {
        $this->validate();

        // Step 1: Analyze tone, sentiment, and intent
        $analysis = $this->analyzeMessage($this->message, $openAIService);

        // Step 2: Handle response based on analysis
        $reply = $this->generateResponse($analysis, $openAIService);

        // Step 3: Store message and response
        $this->responses[] = ['user' => $this->message, 'bot' => $reply];

        // Step 4: Clear message input
        $this->message = '';
    }

    // Step 1: Analyze message for tone, sentiment, and intent
    private function analyzeMessage($message, OpenAIService $openAIService)
    {
        // Example of a more detailed prompt to detect sentiment and intent
        $prompt = "Analyze the following message and identify its sentiment (positive, negative, neutral), tone (formal, friendly, casual), and intent (e.g., requesting a report, asking for help, etc.). Here is the message: '$message'.";

        $response = $openAIService->chat($prompt);

        // Get the analysis response or default to 'neutral' if it's empty
        $analysis = $response['choices'][0]['message']['content'] ?? 'neutral';

        return $analysis;
    }

    // Step 2: Generate a response based on tone, sentiment, and intent
    private function generateResponse($analysis, OpenAIService $openAIService)
    {
        // Check if the analysis has the expected format
        $analysisParts = explode(",", $analysis);

        // If the analysis doesn't have 3 parts, return a fallback response
        if (count($analysisParts) < 3) {
            return 'Sorry, I couldn’t analyze the message correctly. Could you please clarify your request?';
        }

        // Assign the values based on the analysis parts
        list($sentiment, $tone, $intent) = $analysisParts;

        // Handle sentiment and tone-based response
        if (strpos($sentiment, 'positive') !== false) {
            if (strpos($tone, 'friendly') !== false) {
                return 'Hey there! I’m so glad you’re having a great day!';
            }
            return 'I’m happy to hear you’re doing well!';
        } elseif (strpos($sentiment, 'negative') !== false) {
            return 'I’m sorry to hear that. How can I assist you?';
        } elseif (strpos($tone, 'formal') !== false) {
            return 'Good day. How may I assist you with your request?';
        } else {
            // Handle intents like requesting reports, help, etc.
            if (strpos($intent, 'requesting a report') !== false) {
                return 'I can help with that. Could you please specify the type of report you need?';
            } elseif (strpos($intent, 'asking for help') !== false) {
                return 'I’m here to help. What do you need assistance with?';
            }

            // Fallback to default response
            return 'Sorry, I couldn’t understand your request. Could you please clarify?';
        }
    }

    // Render the view for the chatbot
    public function render()
    {
        return view('livewire.chat-bot');
    }
}
