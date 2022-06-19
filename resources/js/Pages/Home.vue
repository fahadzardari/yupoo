<template>
    <Header />

    <Tab :highlight="visiting_page" />
    <div class="main-content min-h-screen mt-2">

        <div class="card-grid grid grid-cols-8 mx-4">

            <Card :url="'https://picsum.photos/id/237/200/200'" :name="'1.jpeg'" :total_images_in_album="'8'" />
            <Card :url="'https://picsum.photos/id/235/200/200'" :name="'2.jpeg'" :total_images_in_album="'8'" />
            <Card :url="'https://picsum.photos/id/230/200/200'" :name="'3.jpeg'" :total_images_in_album="'8'" />
            <Card :url="'https://picsum.photos/id/231/200/200'" :name="'4.jpeg'" :total_images_in_album="'8'" />
            <Card :url="'https://picsum.photos/id/232/200/200'" :name="'5.jpeg'" :total_images_in_album="'8'" />
            <Card :url="'https://picsum.photos/id/233/200/200'" :name="'6.jpeg'" :total_images_in_album="'8'" />
            <Card :url="'https://picsum.photos/id/234/200/200'" :name="'7.jpeg'" :total_images_in_album="'8'" />
            <Card :url="'https://picsum.photos/id/236/200/200'" :name="'8.jpeg'" :total_images_in_album="'8'" />
            <Card :url="'https://picsum.photos/id/238/200/200'" :name="'9.jpeg'" :total_images_in_album="'8'" />
            <Card :url="'https://picsum.photos/id/239/200/200'" :name="'10.jpeg'" :total_images_in_album="'8'" />
            
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
        'images': {
            type: Array,
            default: []
        },

    }

}
</script>