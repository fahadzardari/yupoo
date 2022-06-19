<template>
    <Header />
    <Tab :highlight="visiting_page" />
    <div class="main-content min-h-screen mt-2 container mx-auto">
        <div v-for="(category, index) in categories" :key="category">
            <div class="text-center">
                <h1 class="text-lg uppercase">{{ index }}</h1>
            </div>
            <div
                class="card-grid grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 mx-4 gap-8"
            >
                <div v-for="(album, index_album) in category" :key="album">
                    <Card
                        :url="
                            '/storage/images/' +
                            index +
                            '/' +
                            index_album +
                            '/1.jpg'
                        "
                        :name="index + '/' + index_album + '/1.jpg'"
                        :total_images_in_album="album.length"
                        :item_details_url="
                            '/categories/' + index + '/' + index_album
                        "
                    />
                </div>
                <!-- {{ index_album }} -->

                <!-- {{  }} -->
            </div>
        </div>
    </div>

    <Footer />
</template>

<script>
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
import Tab from "@/Components/Tab.vue";
import Card from "@/Components/Card.vue";
export default {
    components: {
        Header,
        Footer,
        Tab,
        Card,
    },
    data() {
        return {
            show: false,
            visiting_page: "categories",
        };
    },
    props: {
        categories: {
            type: Array,
            default: [],
        },
    },
};
</script>
