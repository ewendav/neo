<div class="livewire-container" >
    <div class="landing-container">
        <div class="landing">
            <x-landing.card.card
                :collection="''"
                :description="''"
                wire:navigate
            ></x-landing.card.card>
            @foreach($collections as $key => $value)
                <x-landing.card.card
                    :collection="$key"
                    :description="$value"
                ></x-landing.card.card>
            @endforeach
        </div>
    </div>
    @vite('resources/views/livewire/landing/landing.css')
</div>
