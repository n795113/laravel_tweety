<x-master>
        <section class="px-8">
            <main class="container mx-auto">
                @auth
                    <div class="lg:flex lg:justify-between">
                        <div class="lg:w-1/6">
                            @include ('_sidebar-links')
                        </div>

                        <div class="lg:flex-1 lg:mx-10" mstyle="max-width: 700px"> <!-- middle section -->
                            {{$slot}}
                        </div> <!-- end middel section -->

                        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
                            @include ('_friends-list')
                        </div>
                    </div>
                @else
                    <p>please <a href="/login">login</a></p>
                @endauth
            </main>
        </section>
</x-master>
