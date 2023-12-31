<footer class="footer" id="footer">
    <div class="container">
    <button id="posts-list-btn" class="btn btn-lg">Posts List</button>
    <button id="submit-post-btn" class="btn btn-lg">Submit Post</button>
    </div>
</footer>

<div id="footer-toggle-btn">&#9650;</div>

<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        position: relative;
    }

    .footer {
        background-color: yellow;
        padding: 25px 0;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        text-align: center;
    }
    
    .btn-lg {
        font-size: 20px;
        padding: 10px 20px;
        order: 2px solid #555;
        background-color: #ddd;
        color: #555;
    }
    
    .btn-lg:hover {
        background-color: #555;
        color: #fff;
    }
    
    #footer-toggle-btn {
        position: fixed;
        left: 10px;
        bottom: 10px;
        width: 30px;
        height: 30px;
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        font-size: 20px;
        color: #555;
    }
</style>

<script>
const submitPostBtn = document.getElementById('submit-post-btn');
const postsListBtn = document.getElementById('posts-list-btn');
const footerToggleBtn = document.getElementById('footer-toggle-btn');
const footer = document.getElementById('footer');

// Removed the .php extension
submitPostBtn.addEventListener('click', () => window.location.href = '../view/submitPost');
postsListBtn.addEventListener('click', () => window.location.href = '../view/postsList');
footerToggleBtn.addEventListener('click', () => {
    footer.style.display = footer.style.display === 'none' ? 'block' : 'none';
    footerToggleBtn.innerHTML = footer.style.display === 'none' ? '&#9650;' : '&#9660;';
});
</script>
