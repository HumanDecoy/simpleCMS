let newLike = (postId) =>{

    $.ajax({
        method: 'POST',
        data:postId,
        url: '/simplecms/partials/newLike.php?postId='+ postId,
    //if success or error
        success: (response) => {
            console.log("Post liked");
            if(!response.error) location.reload(true);
            $(document).ajaxStop(function() { location.reload(true); });

        },
    });
};
