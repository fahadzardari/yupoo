<template>
    <Header />
    <Tab :highlight="visiting_page" />
    <div class="grid grid-cols-8 gap-4 m-2 ">
    <!--Side bar-->

    <SideMenu/>
    
    <!--Right Side-->
    <div class="col-span-7 ... m-2">

        <div class="container min-h-screen mx-auto mt-2 main-content">
            <div v-for="(category, index) in categories" :key="category">
                <div class="text-center">
                    <h1 class="text-lg uppercase">{{ index }}</h1>
                </div>
                <div
                    class="grid grid-cols-2 gap-8 mx-4 card-grid md:grid-cols-4 lg:grid-cols-8"
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

    </div>
    
    </div>
    
    
    
    <!-- <div class="container min-h-screen mx-auto mt-2 main-content">
        <div v-for="(category, index) in categories" :key="category">
            <div class="text-center">
                <h1 class="text-lg uppercase">{{ index }}</h1>
            </div>
            <div
                class="grid grid-cols-2 gap-8 mx-4 card-grid md:grid-cols-4 lg:grid-cols-8"
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

            </div>
        </div>
    </div> -->

    <Footer />
</template>

<script>
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
import Tab from "@/Components/Tab.vue";
import Card from "@/Components/Card.vue";
import { Link } from "@inertiajs/inertia-vue3";
import SideMenu from "@/Components/SideMenu.vue"; 

export default {
    components: {
        Header,
        Footer,
        Tab,
        Card,
        Link,
        SideMenu,
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
