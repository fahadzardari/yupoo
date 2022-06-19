<template>
    <Header />

    <div class="main-content min-h-screen mt-2">

        
        
        
        
        <div class="card-grid grid grid-cols-8 mx-4">

            <Card  :url="'https://picsum.photos/id/237/200/200'" :name="'1.jpeg'" :total_images_in_album="'8'" />



        </div>




    </div>

    <Footer />

</template>

<script>
import Header from '@/Components/Header.vue'
import Footer from '@/Components/Footer.vue'
import Tab from '@/Components/Tab.vue'
import Card from '@/Components/Card.vue'
export default {
    components: {
        Header,
        Footer,
        Tab,
        Card
    },
    data() {
        return {
            show: false,
           
        }
    },
    props: {

    }

}
</script>