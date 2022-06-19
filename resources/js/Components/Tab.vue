<template>
    <div class="bg-gray-200 w-full">
        <div class="container mx-auto">
            <div
                class="tab flex flex-row px-16 pt-14"
                v-if="highlight === 'home'"
            >
                <button
                    class="pb-4 border border-b-2 mr-3 text-green-500 text-md border-b-green-400"
                    @click="HomeClicked()"
                >
                    Home
                </button>
                <button
                    class="text-md pb-4"
                    @mouseover="show = true"
                    @mouseleave="show = false"
                    @click="highlight = 'categories'"
                >
                    All Categories
                </button>
            </div>
            <div
                class="tab flex flex-row px-16 pt-14"
                v-if="highlight === 'categories'"
            >
                <button class="pb-4 mr-3" @click="highlight = 'home'">
                    Home
                </button>
                <button
                    class="text-md pb-4 border border-b-2 mr-3 text-green-500 text-md border-b-green-400"
                    @mouseover="show = true"
                    @mouseleave="show = false"
                    @click="highlight = 'categories'"
                >
                    All Categories
                </button>
            </div>

            <div
                class="flex justify-center items-center"
                v-show="show"
                @mouseover="show = true"
                @mouseout="show = false"
            >
                <div
                    class="dropdown-menu w-10/12 shadow-lg bg-white p-6 rounded-md"
                >
                    <div class="grid grid-cols-4">
                        <div>
                            <h1 class="text-lg">Polo T-shirts</h1>
                            <hr />
                            <p class="text-sm hover:text-green-500">
                                <a href="#">XLL</a>
                            </p>
                            <p class="text-sm hover:text-green-500">
                                <a href="#">2022 style</a>
                            </p>
                        </div>
                        <div>
                            <h1 class="text-lg">Polo T-shirts</h1>
                            <hr />
                            <p class="text-sm hover:text-green-500">
                                <a href="#">XLL</a>
                            </p>
                            <p class="text-sm hover:text-green-500">
                                <a href="#">2022 style</a>
                            </p>
                        </div>
                        <div>
                            <h1 class="text-lg">Polo T-shirts</h1>
                            <hr />
                            <p class="text-sm hover:text-green-500">
                                <a href="#">XLL</a>
                            </p>
                            <p class="text-sm hover:text-green-500">
                                <a href="#">2022 style</a>
                            </p>
                        </div>
                        <div>
                            <h1 class="text-lg">Polo T-shirts</h1>
                            <hr />
                            <p class="text-sm hover:text-green-500">
                                <a href="#">XLL</a>
                            </p>
                            <p class="text-sm hover:text-green-500">
                                <a href="#">2022 style</a>
                            </p>
                        </div>
                        <div>
                            <h1 class="text-lg">Polo T-shirts</h1>
                            <hr />
                            <p class="text-sm hover:text-green-500">
                                <a href="#">XLL</a>
                            </p>
                            <p class="text-sm hover:text-green-500">
                                <a href="#">2022 style</a>
                            </p>
                        </div>
                        <div>
                            <h1 class="text-lg">Polo T-shirts</h1>
                            <hr />
                            <p class="text-sm hover:text-green-500">
                                <a href="#">XLL</a>
                            </p>
                            <p class="text-sm hover:text-green-500">
                                <a href="#">2022 style</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            show: false,
        };
    },
    props: {
        highlight: {
            type: String,
            default: "home",
        },
    },

    methods: {
        HomeClicked() {
            this.$inertia.visit("/");
        },
    },
};
</script>
