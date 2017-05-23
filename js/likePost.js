//Function to like/unlike a post. Gets the argument from showAllBlogPosts.php or blog.php. Called when a button in clicked
let newLike = (userId, postId, count) =>{
    //console.log(userId, postId, count);
    
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
            showLiked(postId,likeInt,count);
        },
    //In case of an error
        error: (error) => {
            console.log("Error");
        },
    }); 
};


let showLiked = (postId,likeInt,count) =>{
    var likeBtn = document.getElementById("likeThis"+postId);
    //console.log(likeBtn);

    console.log(count+ " showliked");

    //console.log(count);

    likeBtn.innerHTML = " ";
    if(likeInt === parseInt(likeInt)){
        
            count = count-1;

        
        //console.log("Already liked by this user");
        console.log(count + " is liked before");

        }
        //console.log("Already liked by this user");
        //console.log(count);

        likeText = 
        `
            Like [${count}]
        `;
        likeBtn.innerHTML=likeText;
    }else{

        //count = count + 1;
        console.log(count + " not liked before");
       // console.log("Not liked before by this user");

        //count = count + 1;
        //console.log(count);
        //console.log("Not liked before by this user");

        likeText = 
        `
            Like [${count}]
        `;
        likeBtn.innerHTML=likeText;
    }
};



