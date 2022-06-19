<template>
    <Header />

    <Tab :highlight="visiting_page" />

    <!-- {{ images }} -->

    <div class="container min-h-screen mx-auto mt-2 main-content">
        <div
            class="grid lg:grid-cols-7 md:grid-cols-4 grid-cols-2 gap-8 mx-4 card-grid"
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
                    class="w-full cursor-pointer h-40 rounded-t-md"
                    alt=""
                />
            </div>
        </div>
    </div>

    <div v-if="imageOpened" class="fixed z-50 top-0">
        <!-- close button -->
        <div class="absolute top-0 right-0">
            <button
                @click="imageOpened = false"
                class="bg-white text-gray-800 font-semibold hover:text-gray-600 py-2 px-4 border border-gray-400 hover:border-gray-500 rounded-full"
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
