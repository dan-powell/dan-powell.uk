<section class="HomeCallToAction">
    <div class="HomeCallToAction-container">
        <div class="HomeCallToAction-column">
            <a href="{{ route('projects.index') }}" class="HomeCallToAction-button HomeCallToAction-button--primary">
                <span class="HomeCallToAction-button-icon">
                    <svg class="HomeCallToAction-button-svg" viewBox="0 0 512 512">
                        <use xlink:href="{{ asset('img/sidebar/icons.svg#projects') }}"></use>
                    </svg>
                </span>
                More Projects
            </a>
        </div>
        {{-- <div class="HomeCallToAction-column">
            <a href="{{ route('page', 'experience') }}" class="HomeCallToAction-button HomeCallToAction-button--secondary">
                <span class="HomeCallToAction-button-icon">
                    <svg class="HomeCallToAction-button-svg" viewBox="0 0 512 512">
                        <use xlink:href="{{ asset('img/sidebar/icons.svg#education') }}"></use>
                    </svg>
                </span>
                Experience
            </a>
        </div>
        <div class="HomeCallToAction-column">
            <a href="{{ route('page', 'skills') }}" class="HomeCallToAction-button HomeCallToAction-button--tertiary">
                <span class="HomeCallToAction-button-icon">
                    <svg class="HomeCallToAction-button-svg" viewBox="0 0 512 512">
                        <use xlink:href="{{ asset('img/sidebar/icons.svg#work') }}"></use>
                    </svg>
                </span>
                Skills
            </a>
        </div> --}}
    </div>
</section>
