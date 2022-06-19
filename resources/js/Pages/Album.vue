<template>
    <Header />

    <Tab :highlight="visiting_page" />

    {{ images }}

<div class="container min-h-screen mx-auto mt-2 main-content">
            <div class="grid grid-cols-7 gap-8 mx-4 card-grid">
                    <div v-for="(belt, index) in images" :key="index">
                
                    <!-- <div @click="imgClick(belt)" >
                <div v-if='belt.show' @close="belt.show = false"> -->
                    <div  @click="imgClick(belt)">
                        
                    <Card
                        :url="
                            'storage/images/belts/1/1.jpg' 
                            "
                        :name="index "
                    />

                    </div>
                    
                <!-- </div> -->

                        <!-- </div> -->
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
// import Modal from './Modal.vue'
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
        };
    },
    props: {
        images: {
            type: Array,
            default: [],
        },
    },

    methods: {
        imgClick(belt) {
            belt.show = true
        }
    }

};
</script>
