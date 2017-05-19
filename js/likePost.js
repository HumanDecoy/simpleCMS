let newLike = (userId, postId, count) =>{
    //console.log(userId, postId, count);
    
    $.ajax({
        method: 'POST',
        data:postId,
        url: '/simplecms/partials/newLike.php?postId='+ postId,
    //if successfull call
        success: (response) => {
            console.log("Success! Post liked");
           // console.log(response);
            var data = JSON.parse(response);
            //console.log(data);
            //console.log(data.postId);
            var likeInt = data.id;
            //console.log(likeInt);
            showLiked(postId,likeInt,count);
        },
    //if there is an error
        error: (error) => {
            console.log("Error");
        },
    }); 
};


let showLiked = (postId,likeInt,count) =>{
    var likeBtn = document.getElementById("likeThis"+postId);
   //console.log(likeBtn);
    //console.log(count);
    
    likeBtn.innerHTML = " ";
    if(likeInt === parseInt(likeInt, 10)){
        if(count !== 0){
            count = count-1;
        }

        console.log("already liked by this user");
        //console.log(count);

        likeText = 
        `
            <button class="btn btn-lg btn-primary" type="submit" id="likeThis'.$row['id'].'" 
            onclick="newLike('.$row['userID'].', '. $row['id'].', '.$count.'); ">
            Like [${count}]</button>
        `;
        likeBtn.innerHTML=likeText;
    }else{
        if(count === 0){
            count = count +1;
        }else if(likeInt === undefined){
            count = count + 1;
        }
        //console.log(count);
        console.log("not liked before by this user");
        likeText = 
        `
            <button class="btn btn-lg btn-primary" type="submit" id="likeThis'.$row['id'].'"  
            onclick="newLike('.$row['userID'].' , '. $row['id'].', '.$count.');">
            Like [${count}]</button>
        `;
        likeBtn.innerHTML=likeText;
    }
};



