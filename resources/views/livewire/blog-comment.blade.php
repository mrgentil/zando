<div>
    <div class="single-comment-list">
        @if(session()->has('success'))
            <div class="notification success closeable" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
        <h3 class="h3">Les commentaires <span>({{ $comments->count() }})</span></h3>
        <ol class="comments-list">
            @forelse($comments as $comment)
                <li class="comment">
                    <article>
                        <div class="comment-avatar kopa-pull-left">
                            <a href="#"><img alt=""
                                             src="https://www.gravatar.com/avatar/{{ md5($comment->email) }}.jpg?s=80"></a>
                        </div>
                        <div class="comment-content">
                            <header>
                                <div class="entry-meta style-01">
                                    <p class="entry-author">
                                        <a href="#" style="color: #333 !important;">
                                            <i class="fa fa-user"></i>
                                            par {{ $comment->name }}
                                        </a>
                                    </p>
                                    <p class="entry-date"><i class="fa fa-calendar-o"></i>{{ $comment->created_at }}</p>

                                </div>
                            </header>
                            <p>
                                {{ $comment->content }}
                            </p>
                        </div>
                    </article>
                </li>
            @empty
                <li class="comment">
                    <article style="padding: 20px">
                        Cet article ne contient aucun commentaire pour l'instant
                    </article>
                </li>
            @endforelse
        </ol>
    </div>
    <div id="comments" style="margin-top: 20px;">
        <h2 class="h3">Laissez un commentaire</h2>
        <div class="form-vertical">
            <form wire:submit.prevent="submit" id="comment_form" accept-charset="UTF-8" class="comment-form">
                <input type="hidden" name="form_type" value="new_comment"><input type="hidden" name="utf8" value="?">
                <div class="grid grid--small">
                    <div class="grid__item large--one-half">
                        <label for="CommentAuthor" class="hidden-label">NOM</label>
                        <input
                            placeholder="Nom"
                            id="CommentAuthor"
                            autocapitalize="words"
                            wire:model.lazy="name"
                            class="input-full @error('name') is-invalid @enderror"
                            autocomplete="name"
                        >
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="grid__item large--one-half">
                        <label for="CommentEmail" class="hidden-label">Email</label>
                        <input placeholder="Email"
                               id="CommentEmail"
                               wire:model.lazy="email"
                               class="input-full @error('email') is-invalid @enderror"
                               autocomplete="name" autocorrect="off" autocapitalize="off">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="CommentBody" class="hidden-label">Message</label>
                    <textarea
                        class="input-full @error('content') is-invalid @enderror"
                        wire:model.lazy="content"
                        autocomplete="content"
                        id="CommentBody"
                        placeholder="Message"></textarea>
                    @error('content')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="article-button">
                    <button class="btn" type="submit">
                        <svg wire:target="submit" wire:loading width="20" height="20" viewBox="0 0 38 38"
                             xmlns="http://www.w3.org/2000/svg">
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
                                            repeatCount="indefinite"/>
                                    </path>
                                    <circle fill="#fff" cx="36" cy="18" r="1">
                                        <animateTransform
                                            attributeName="transform"
                                            type="rotate"
                                            from="0 18 18"
                                            to="360 18 18"
                                            dur="0.9s"
                                            repeatCount="indefinite"/>
                                    </circle>
                                </g>
                            </g>
                        </svg>
                        Laissez un commentaire
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
