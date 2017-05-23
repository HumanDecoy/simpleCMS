//Function to like/unlike a post. Gets the argument from showAllBlogPosts.php or blog.php. Called when a button in clicked
let newLike = (userId, postId, count) =>{
    
    //Ajax call to update the page async
    $.ajax({
        method: 'POST',
        data:postId,
        url: '/simplecms/partials/newLike.php?postId='+ postId,
    //If successfull call
        success: (response) => {
            console.log("Success! Like counted");
            var data = JSON.parse(response);
            var likeInt = data.id;
            showLiked(postId,likeInt,count,userId);
        },
    //In case of an error
        error: (error) => {
            console.log("Error");
        },
    }); 
};


let showLiked = (postId,likeInt,count,userId) =>{
    var likeDiv = document.getElementById("likeDiv"+postId);
    likeDiv.innerHTML = " ";
    if(likeInt === parseInt(likeInt)){
        count = count-1;
        console.log("Already liked by this user");
        likeText = 
        `
            <button class="btn btn-lg btn-primary" type="submit" id="likeThis${postId}" onclick="newLike(${userId}, ${postId}, ${count}); ">Like [${count}]</button>
        `;
        likeDiv.innerHTML=likeText;
    }else if(likeInt === undefined){
        count = count + 1;
        console.log("Not liked before by this user");
        likeText = 
        `
            <button class="btn btn-lg btn-primary" type="submit" id="likeThis${postId}" onclick="newLike(${userId}, ${postId}, ${count}); ">Like [${count}]</button>
        `;
        likeDiv.innerHTML=likeText;
    }
};



