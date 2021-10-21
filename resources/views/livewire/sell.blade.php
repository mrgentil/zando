<div id="html-section-1487408997957" class="html-section index-section product-banner-grid"  wire:loading.class.add="loading-wrapper" style="position: relative">
    <spinning-dots id="spinner" wire:loading></spinning-dots>

    <div class="wrapper">
        <div class="grid" id="collection">
            <div class="grid__item large--one-whole">
                <div class="collection-toolbar" style="border: 1px solid #ebebeb;padding: 10px 20px;">
                    <div id="filter-click" style="float: left;margin: 8px 15px 0 0;">
                        Acheter par
                    </div>
                    <div class="collection-view">
                        <button type="button" title="Grid view" class="grid-button change-view change-view--active" data-view="grid">
                            <span class="icon-fallback-text">
                            <span class="icon icon-grid-view" aria-hidden="true"></span>
                            <span class="fallback-text">Grid view</span>
                            </span>
                        </button>
                        <button type="button" title="List view" class="list-button change-view" data-view="list">
                            <span class="icon-fallback-text">
                            <span class="icon icon-list-view" aria-hidden="true"></span>
                            <span class="fallback-text">List view</span>
                            </span>
                        </button>
                    </div>
                    <div class="collection-sort">
                        <label for="SortBy">Trier par</label>
                        <select name="SortBy" id="SortBy" wire:model="sort">
                            <option value="title-ascending">Par ordre alphabétique, A-Z</option>
                            <option value="title-descending">Par ordre alphabétique, Z-A</option>
                            <option value="price-ascending">Prix, bas à élevé</option>
                            <option value="price-descending">Prix, élevé à bas</option>
                            <option value="created-descending">Date, Du nouveau à l'ancien</option>
                            <option value="created-ascending">Date, De l'ancien au nouveau</option>
                        </select>
                    </div>
                </div>
                <div id="filter-area" style="display:none;">
                    <div class="sb-wrapper shop-by" data-animate="" data-delay="0">
                        <div class="shop-by-content" id="tags-filter-content">
                            <div class="filter-tag-group">
                                <div class="tag-group grid__item one-quarter" id="coll-filter-1">
                                    <p class="title cfc1" data-toggle="collapse" data-target="#cfc1">
                                        Prix<span class="ficon"><i class="fa fa-minus"></i></span>
                                    </p>
                                    <ul id="cfc1" class="collapse in">
                                        @foreach($prices as $priceValue)
                                        <li>
                                            <a href="javascript:void(0)" {{ $priceValue->value == $price ? 'class=check' : ''  }}
                                            wire:click="$set('price', '{{ $priceValue->value === $price ? '' : $priceValue->value }}')">
                                                <span class="fe-checkbox"></span> {{ $priceValue->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="tag-group grid__item one-quarter" id="coll-filter-2">
                                    <p class="title cfc2" data-toggle="collapse" data-target="#cfc2">
                                        Marques<span class="ficon"><i class="fa fa-minus"></i></span>
                                    </p>
                                    <ul id="cfc2" class="collapse in">
                                        @foreach($categories as $category)
                                        <li>
                                            <a href="javascript:void(0)" {{ $category->slug === $brand ? 'class=check' : ''  }}
                                                wire:click="$set('brand', '{{ $category->slug === $brand ? '' : $category->slug }}')">
                                                <span class="fe-checkbox"></span>
                                                {{ ucfirst($category->name) }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="tag-group grid__item one-quarter" id="coll-filter-3">
                                    <p class="title cfc3" data-toggle="collapse" data-target="#cfc3">
                                        Couleurs<span class="ficon"><i class="fa fa-minus"></i></span>
                                    </p>
                                    <ul id="cfc3" class="collapse in">
                                        @foreach ($colors as $colorCode)
                                        <li class="swatch-tag ">
                                            <span style="background-color: {{ $colorCode->code }}" class="btooltip" data-toggle="tooltip" data-placement="top" title="{{ $colorCode->name }}">
                                                <a href="javascript:void(0)" {{ substr($colorCode->code, 1) === $color ? 'class=check' : ''  }}
                                                wire:click="$set('color', '{{ substr($colorCode->code, 1) === $color ? '' : substr($colorCode->code, 1) }}')"></a>
                                            </span>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-uniform grid-uniform-category ">
                    @forelse($phones as $phone)
                    <div class="grid-element grid__item medium-up--one-quarter one-quarter">
                        <div class="grid-view-item">
                            <div class="grid-normal-display">
                                <div class="grid__image product-image">
                                    <a class="grid-view-item__link" href="{{ route('phone.show', $phone->slug) }}">
                                        <img class="grid-view-item__image" src="{{ $phone->firstImage }}" alt="{{ $phone->name }} Pixel">
                                    </a>
                                    <div class="product-label">
                                        <div class="label-element trend-label">
                                            <span>{{ $phone->type->name }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__layout grid__information product-information">
                                    <div class="h4 grid-view-item__title text-center">
                                        <a href="{{ route('phone.show', $phone->slug) }}">{{ $phone->name }}</a>
                                    </div>
                                    <div class="rating-star text-center">
                                        <span class="spr-badge" id="spr_badge_9059386182" data-rating="4.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star-empty"></i></span><span class="spr-badge-caption">1 review</span>
                                        </span>
                                    </div>
                                    <div class="grid-view-item__meta text-center">
                                        <span class="product__price">
                                            <span class="product__price">
                                                <a href="#" class="badge badge-primary btn-badge">{{ $phone->price }} $</a>
                                                <a href="{{ route('phone.show', [$phone->slug]) }}" class="badge badge-info btn-badge">Acheter</a>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-layout">
                                <div class="h4 grid-view-item__title">
                                    <a href="{{ route('phone.show', $phone->slug) }}">{{ $phone->name }}</a>
                                </div>
                                <div class="rating-star">
                                    <span class="spr-badge" id="spr_badge_9212331974" data-rating="5.0">
                                        <span class="spr-starrating spr-badge-starrating">
                                            <i class="spr-icon spr-icon-star"></i>
                                            <i class="spr-icon spr-icon-star"></i><i class="spr-icon spr-icon-star">
                                            </i><i class="spr-icon spr-icon-star"></i>
                                            <i class="spr-icon spr-icon-star"></i>
                                        </span>
                                        <span class="spr-badge-caption">1 review</span>
                                    </span>
                                </div>
                                <div class="grid-view-item__meta">
                                    <span class="product-price__price">
                                        <a href="#" class="badge badge-primary btn-badge">{{ $phone->price }} $</a>
                                        <a href="{{ route('phone.show', [$phone->slug]) }}" class="badge badge-info btn-badge">Acheter</a>
                                    </span>
                                </div>
                                <div class="grid-description">
                                    {!! $phone->caracteristiques !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <div class="grid-element grid__item medium-up--one-quarter one-quarter">
                            <div class="grid-view-item" style="border: none">
                                <h1>Aucun téléphone trouvé</h1>
                            </div>
                        </div>
                    @endforelse
                </div>
                <div style="margin: 30px;">
                    {{ $phones->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
