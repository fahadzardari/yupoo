<template>
    
<Highlight/>


</template>

<script>

import Highlight from '@/Components/Highlight.vue';

export default ({
    
    components:{
        Highlight,
    },

    data(){
        return{
                images:[
            '/storage/belts/1/1.jpg' ,
            '/storage/belts/1/2.jpg' ,
            '/storage/belts/1/3.jpg' ,        
            ],
        };
    },

})
</script>
