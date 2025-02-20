<div class="card shadow-sm">
    <div class="card-body chat-box" style="height: 300px; overflow-y: auto;">
        @foreach($responses as $chat)
            <div class="mb-2">
                <strong>User:</strong> {{ $chat['user'] }}
            </div>
            <div class="mb-2">
                <strong>Bot:</strong> {{ $chat['bot'] }}
            </div>
            <hr>
        @endforeach
    </div>
    <div class="card-footer">
        <input type="text" class="form-control" wire:model="message" wire:keydown.enter="sendMessage" placeholder="Type your message...">
        <button class="btn btn-primary mt-2" wire:click="sendMessage">Send</button>
    </div>
</div>
