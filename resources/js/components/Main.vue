<template>
    <main>
        <div class="container">

            <h1>Elenco dei post</h1>

            <div class="row">

                <div class="col-4 mb-3" v-for="post in posts" :key="post.id">

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{post.title}}</h5>
                            <p class="card-text">{{post.content}}</p>
                            <a href="#" class="btn btn-primary">Vedi Articolo</a>
                        </div>
                    </div>

                </div>

            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li @click="getPosts(currentPage - 1)" class="page-item" :class="(currentPage == 1) ? 'disabled': ''"><a class="page-link" href="#">Prev</a></li>
                    <li @click="getPosts(currentPage + 1)" class="page-item" :class="(currentPage == lastPage) ? 'disabled': ''"><a class="page-link" href="#">Next</a></li>
                </ul>

            </nav>
        </div>
        
    </main>
</template>

<script>
export default {
    name: 'Main',

    data() {
        return {
            posts: [],
            currentPage: 1,
            lastPage: null
        }
    },

    methods: {
        getPosts(page) {
            axios.get('/api/posts', {
            'params': {
                'page': page
            }
            })
            .then((response) => {
                this.posts = response.data.results.data;
                this.currentPage = response.data.results.current_page;
                this.lastPage = response.data.results.last_page;
            })
        }
        
    },
    
    created() {
        this.getPosts(this.currentPage)
    }
}
</script>

<style>

</style>