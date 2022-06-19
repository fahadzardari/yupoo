<template>
    <Header />

    <Tab :highlight="visiting_page" />

    <!-- {{ images }} -->

    <div class="container min-h-screen mx-auto mt-2 main-content">
        
        <p class="p-2 text-4xl text-left uppercase bg-white">{{category + " " + album}}</p>

        <div
            class="grid grid-cols-2 gap-8 mx-4 mt-10 lg:grid-cols-7 md:grid-cols-4 card-grid"
        >
        
            <div v-for="(image, index) in images" :key="index">
                <img
                    :src="
                        '/storage/images/' +
                        category +
                        '/' +
                        album +
                        '/' +
                        image
                    "
                    @click="
                        imgClick(
                            '/storage/images/' +
                                category +
                                '/' +
                                album +
                                '/' +
                                image
                        )
                    "
                    class="w-full h-40 cursor-pointer rounded-t-md "
                    alt=""
                />
                <p for="cat" class="p-2 text-center bg-white shadow-lg">{{image}}</p>
            </div>
        </div>
    </div>

    <div v-if="imageOpened" class="fixed top-0 z-50">
        <!-- close button -->
        <div class="absolute top-0 right-0">
            <button
                @click="imageOpened = false"
                class="px-4 py-2 font-semibold text-gray-800 bg-white border border-gray-400 rounded-full hover:text-gray-600 hover:border-gray-500"
            >
                Close
            </button>
        </div>
        <img :src="currentImage" class="w-screen h-screen" alt="" srcset="" />
    </div>

    <Footer />
</template>

<script>
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
import Tab from "@/Components/Tab.vue";
export default {
    components: {
        Header,
        Footer,
        Tab,
    },
    data() {
        return {
            show: false,
            imageOpened: false,
            currentImage: "",
        };
    },
    props: {
        images: {
            type: Array,
            default: [],
        },
        category: {
            type: String,
            default: "",
        },
        album: {
            type: String,
            default: "",
        },
    },

    methods: {
        imgClick(image) {
            this.currentImage = image;
            this.imageOpened = true;
        },
    },
};
</script>
