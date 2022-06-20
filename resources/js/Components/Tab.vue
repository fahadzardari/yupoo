<template>
    <div>
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
                        @click="show = !show"
                    >
                        All Categories
                    </button>
                </div>
                <div
                    class="tab flex flex-row px-16 pt-14"
                    v-if="highlight === 'categories'"
                >
                    <button class="pb-4 mr-3" @click="highlight = HomeClicked">
                        Home
                    </button>
                    <button
                        class="text-md pb-4 border border-b-2 mr-3 text-green-500 text-md border-b-green-400"
                        @mouseover="show = true"
                        @mouseleave="show = false"
                        @click="show = !show"
                    >
                        All Categories
                    </button>
                </div>
            </div>
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
                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1">
                    <div
                        v-for="(category, category_name) in all_categories"
                        :key="category"
                    >
                        <h1 class="text-lg uppercase hover:text-green-500" v-for="(album, album_name) in category"
                            :key="album">
                            <a :href="`/category/` + category_name">
                            {{ album_name }}</a>
                            <hr>
                        </h1>
                        
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
        all_categories: {
            type: Array,
            default: {
                belts: {
                   '腰带':[]
                },
                downjackets: {
                    "外套": [],
                },
                jackets: {
                    "外套": [],
                
                },
                shirts: {
                    "T恤": [],
                },
                sweaters: {
                    "毛衣": [],
                },
                tshirts: {
                    "T恤": [],
                
                },
            },
        },
    },
    mounted() {
        console.log(this.all_categories);
    },
    methods: {
        HomeClicked() {
            this.$inertia.visit("/");
        },
    },
};
</script>
