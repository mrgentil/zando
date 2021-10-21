<div class="form-vertical grid__item large--one-half position-relative">
    <div>

        @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
    <form method="post" wire:submit.prevent="submit"  id="contact_form" accept-charset="UTF-8" class="contact-form">
        <div class="grid grid--small">
            <div class="grid__item large--one-half mb-2">
                <label for="name" class="hidden-label">Nom</label>
                <input type="text" id="name" class="input-full @error('name') is-invalid @enderror"
                       wire:model.lazy="name" placeholder="Nom" autocapitalize="words" value="{{ old('name') }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="grid__item large--one-half  mb-2">
                <label for="email" class="hidden-label">Email</label>
                <input type="email" id="email" class="input-full @error('email') is-invalid @enderror" wire:model.lazy="email"
                       placeholder="Email" autocorrect="off" autocapitalize="off" value="{{ old('email') }}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

       <div class=" mb-2">
           <label for="phone" class="hidden-label">Téléphone</label>
           <input type="tel" id="phone" class="input-full @error('phone') is-invalid @enderror"
                  wire:model.lazy="phone"
                  placeholder="Téléphone" value="{{ old('phone') }}">
           @error('phone')
           <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
           @enderror
       </div>

        <label for="message" class="hidden-label">Message</label>
        <textarea rows="5" id="message" class="input-full @error('phone') is-invalid @enderror"
                  wire:model.lazy="message" placeholder="Message">{{ old('message') }}</textarea>
        @error('message')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <button class="btn right mb-3" wire:target="submit" type="submit"
                wire:loading.attr="disabled">
            <svg  wire:target="submit" wire:loading width="20" height="20" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
                        <stop stop-color="#fff" stop-opacity="0" offset="0%"/>
                        <stop stop-color="#fff" stop-opacity=".631" offset="63.146%"/>
                        <stop stop-color="#fff" offset="100%"/>
                    </linearGradient>
                </defs>
                <g fill="none" fill-rule="evenodd">
                    <g transform="translate(1 1)">
                        <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2">
                            <animateTransform
                                attributeName="transform"
                                type="rotate"
                                from="0 18 18"
                                to="360 18 18"
                                dur="0.9s"
                                repeatCount="indefinite" />
                        </path>
                        <circle fill="#fff" cx="36" cy="18" r="1">
                            <animateTransform
                                attributeName="transform"
                                type="rotate"
                                from="0 18 18"
                                to="360 18 18"
                                dur="0.9s"
                                repeatCount="indefinite" />
                        </circle>
                    </g>
                </g>
            </svg>
            Laissez un message
        </button>
    </form>
</div>
