import React, { Component } from 'react';
import axios from 'axios';

import Post from '../../components/Post/Post';
import FullPost from '../../components/FullPost/FullPost';
import NewPost from '../../components/NewPost/NewPost';
import './Blog.css';


class Blog extends Component {
    state = { //initialize state with empty data
      posts: [], selectedPostId: ''
    };
    componentDidMount() {
        //Get request using Axios package
        axios.get('/posts')
            .then(response => { //Promise executed when data is sent back
                //Manipulate data before setting state
                const posts = response.data.slice(0,4);
                const updatedPosts = posts.map(post => {
                    return{
                        ...post, author: 'Mike'
                    }
                });
                //Set the data in the state
                this.setState({posts: updatedPosts});
            });
    }
    postSelectedHandler = (id) => {
        this.setState({selectedPostId: id})
    };

    render () {
        //New variable with JSX code for each element
        const posts = this.state.posts.map((post) => {
            //title and id are fields of the returned data
            return <Post clicked={() => this.postSelectedHandler(post.id)}
                         author={post.author}
                         title={post.title}
                         key={post.id}/>
        });

        return (
            <div>
                <section className="Posts">
                    {posts}
                </section>
                <section>
                    <FullPost id={this.state.selectedPostId} />
                </section>
                <section>
                    <NewPost />
                </section>
            </div>
        );
    }
}

export default Blog;