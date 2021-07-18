export default {
    tweets(state) {
        return state.tweets
            .sort((a, b) => b.created_at - a.created_at)
    },

    tweet(state) {
        console.log(id => state.tweets.find(t => t.id === id))
        return id => state.tweets.find(t => t.id === id)
    }
}