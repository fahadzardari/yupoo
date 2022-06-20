<template>
    <div>
        <div class="w-full bg-gray-200">
            <div class="container mx-auto">
                <div
                    class="flex flex-row px-16 tab pt-14"
                    v-if="highlight === 'home'"
                >
                    <button
                        class="pb-4 mr-3 text-green-500 border border-b-2 text-md border-b-green-400"
                        @click="HomeClicked()"
                    >
                        Home
                    </button>
                    <button
                        class="pb-4 text-md"
                        @mouseover="show = true"
                        @mouseleave="show = false"
                        @click="show = !show"
                    >
                        All Categories
                    </button>
                </div>
                <div
                    class="flex flex-row px-16 tab pt-14"
                    v-if="highlight === 'categories'"
                >
                    <button class="pb-4 mr-3" @click="highlight = HomeClicked">
                        Home
                    </button>
                    <button
                        class="pb-4 mr-3 text-green-500 border border-b-2 text-md border-b-green-400"
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
            class="flex items-center justify-center"
            v-show="show"
            @mouseover="show = true"
            @mouseout="show = false"
        >
            <div
                class="w-10/12 p-6 bg-white rounded-md shadow-lg dropdown-menu"
            >
                <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2">
                    <div
                        v-for="(category, category_name) in all_categories"
                        :key="category"
                    >
                        <h1
                            class="text-lg uppercase hover:text-green-500"
                            v-for="(album, album_name) in category"
                            :key="album"
                        >
                            <a :href="`/category/` + category_name">
                                {{ album_name }}</a
                            >
                            <hr />
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
                    "皮带 The belt": [],
                },
                downjackets: {
                    "羽绒服Down jacket": [],
                },
                jackets: {
                    "夹克货稳 JACKET": [],
                },
                shirts: {
                    "衬衫 shirt": [],
                },
                sweaters: {
                    毛衣Sweater: [],
                },
                tshirts: {
                    "圆领短袖 T-shirt": [],
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
