<section class="bg-primary pt-30 pb-30">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex flex-col w-5/12 gap-5 text-white">
            <h1 class="text-5xl font-bold "> {{ get_field('title') }} </h1>
            <div class="w-[86%]">{!! get_field('content') !!}</div>
        </div>
        <div class="flex flex-col w-3/12 gap-8">

            @if (have_rows('itens'))
                <div class="space-y-4">
                    @while (have_rows('itens'))
                        @php the_row(); @endphp
                        <div class="item w-full bg-white p-6 gap-5 flex rounded-4xl">
                            <div class="ico w-[45px] h-[45px] bg-orange-400 flex items-center justify-center">
                                @php
                                    $icone = get_sub_field('icone');
                                @endphp
                                @if ($icone)
                                    <img src="{{ $icone['url'] }}" alt="{{ $icone['alt'] }}"
                                        class="w-full h-full object-contain">
                                @endif
                            </div>
                            <div class="text w-3/4">
                                <p class="font-bold">{{ get_sub_field('titulo') }}</p>
                                <p class="text-xs">{{ get_sub_field('descricao') }}</p>
                            </div>
                        </div>
                    @endwhile
                </div>
            @endif
        </div>
    </div>
</section>
