<template>
    <div>
        <h1>Value of counter: {{ counter }}</h1>
        <button @click="counterUp()">+1</button>
        <button @click="counterDown()">-1</button>

        <div>
            {{ message }}
        </div>
        <br><br>
        <h2>
            v-if="books.length" <=> v-if="books.length > 0"
        </h2><br>
        <div v-for="(book, i) in books" :key="i" v-if="books.length">
            <h3>Title: {{ book.title}}</h3>
            <div>Author: {{ book.author}}</div>
            <br>
        </div>
        <div v-if="books.length == 0">
            <h3>Repository is empty</h3>
        </div>
        <br><br>
        <div>
            <h4 v-if="canBook">You can't borrow book </h4>
            <h4 v-else>You can borrow book</h4>
        </div>
        <button @click="canBook = !canBook">Change status</button>

    </div>
</template>

<script>
    export default  {
        data () {
            return {
                counter: 0,
                message: [
                   'function is call the first. but after this change value by hook created ()',
                   'counter is created '
                ],

                books: [],
                canBook: false,

            }


        },

        methods: {
            counterUp () {
                this.counter += 1;
            },
            counterDown () {
                this.counter -= 1;
            }
        },
        created() {
            this.counter = 100;
            console.log('counter is change value');
            let bookDB = [
                // {
                //     title: "Chúa tể những chiếc nhẫn",
                //     author: "tungnt"
                // },
                // {
                //     title: "Hẹn ước với thời gian",
                //     author: "quanda"
                // },
                // {
                //     title: "Có con cạc ",
                //     author: "hopdt"
                // },
            ];
            this.books = bookDB;

        }
    }
</script>