<section class="HomeProject">
    @include('main.project.excerpt', ['item' => $project])
    <div class="HomeProject-point">
        <img class="HomeProject-point-img" src="{{ asset('/img/dan_powell_pointing.svg') }}" alt="A Cartoon style profile picture of Dan Powell">
    </div>
    <div class="HomeProject-speech">
        <div class="HomeProject-speech-inner">
            <p class="HomeProject-speech-bubble">Look, I made a thing!</p>
        </div>
    </div>
</section>
