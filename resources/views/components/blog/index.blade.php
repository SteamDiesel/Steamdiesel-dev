<x-layout :title="'Blog'" :description="'SteamDiesel.dev Blog articles'">

    <div class="sm:px-8 mt-16 sm:mt-32">
        <div class="mx-auto max-w-7xl lg:px-8">
            <div class="relative px-4 sm:px-8 lg:px-12">
                <div class="mx-auto max-w-2xl lg:max-w-5xl">
                    <header class="max-w-2xl">
                        <h1 class="
									text-4xl
									font-bold
									tracking-tight
									text-zinc-800
									dark:text-zinc-100
									sm:text-5xl
								">
                            On creating digital products, web development &
                            growing an online business.
                        </h1>
                        <p class="
									mt-6
									text-base text-zinc-600
									dark:text-zinc-400
								">
                            All of my long-form thoughts on programming,
                            leadership, product design, and more, collected
                            in chronological order.
                        </p>
                    </header>
                    <div class="mt-16 sm:mt-20">
                        <div class="
									md:border-l
									md:border-zinc-100
									md:pl-6
									md:dark:border-zinc-700/40
								">
                            <div class="flex max-w-3xl flex-col space-y-16">
                                @foreach ($posts as $post)

                                <x-blog.card :post="$post"></x-blog.card>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
