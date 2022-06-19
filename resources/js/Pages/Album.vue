<template>
    <Header />

    <Tab :highlight="visiting_page" />

    {{ images }}

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
        };
    },
    props: {
        images: {
            type: Array,
            default: [],
        },
    },
};
</script>
