<template>
<Header/>

<div class="main-content">

<Tab :highlight="visiting_page"/>












</div>

<Footer/>

</template>

<script>
import Header from '@/Components/Header.vue'
import Footer from '@/Components/Footer.vue'
import Tab from '@/Components/Tab.vue'
export default {
    components: {
        Header,
        Footer,
        Tab
    },
    data(){
        return{
            show : false,
            visiting_page:'home'
        }
    },
    props:{

    }
    
}
</script>