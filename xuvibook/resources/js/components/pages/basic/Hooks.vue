<template>
    <div>
        <h1 ref="my_ref">This is Hooks</h1>
        <p>My name: {{ name}}</p>
    </div>
</template>

<script>
    export default {
        beforeCreate () {
            console.log("before created, name is undefined, value: ", this.name);
        },

        created () {
            console.log("created hook, name: ", this.name);
        },

        beforeMount () {

        },

        mounted () {
            console.log("mounted is create after instance vue object render and html build ");
            console.log('element ref: (ref="my_ref"): ', this.$refs.my_ref);
        },

        beforeUpdate () {

        },

        updated () {

        },

        beforeDestroy () {

        },

        destroyed () {

        },

        data () {
            return {
                name: "hopdt"
            }
        }
    }
</script>