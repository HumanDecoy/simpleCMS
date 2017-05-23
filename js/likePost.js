//Function to like/unlike a post. Gets the argument from showAllBlogPosts.php or blog.php. Called when a button in clicked
let newLike = (userId, postId, count) =>{
    console.log(userId, postId, count);
    
    //Ajax call to update teh page async
    $.ajax({
        method: 'POST',
        data:postId,
        url: '/simplecms/partials/newLike.php?postId='+ postId,
    //If successfull call
        success: (response) => {
            console.log("Success! Post liked");
            console.log(response);
            console.log(count + " response");
            var data = JSON.parse(response);
            console.log(data);
            //console.log(data.postId);
            var likeInt = data.id;
            console.log(likeInt);
            showLiked(postId,likeInt,count,userId);
        },
    //In case of an error
        error: (error) => {
            console.log("Error");
        },
    }); 
};


let showLiked = (postId,likeInt,count,userId) =>{
    var likeBtn = document.getElementById("likeThis"+postId);
    var likeDiv = document.getElementById("likeDiv"+postId);
    console.log(likeBtn);
    console.log(likeDiv);
    console.log(count+ " showliked");
    likeDiv.innerHTML = " ";
    if(likeInt === parseInt(likeInt)){
        
            count = count-1;
        
        //console.log("Already liked by this user");
        console.log(count + " is liked before");
        likeText = 
        `
            <button class="btn btn-lg btn-primary" type="submit" id="likeThis${postId}" onclick="newLike(${userId}, ${postId}, ${count}); ">Like [${count}]</button>
        `;
        likeDiv.innerHTML=likeText;
    }else if(likeInt === undefined){

        count = count + 1;
        console.log(count + " not liked before");
       // console.log("Not liked before by this user");
        likeText = 
        `
            <button class="btn btn-lg btn-primary" type="submit" id="likeThis${postId}" onclick="newLike(${userId}, ${postId}, ${count}); ">Like [${count}]</button>
        `;
        likeDiv.innerHTML=likeText;
    }
    console.log(count + " after ifs");
};



