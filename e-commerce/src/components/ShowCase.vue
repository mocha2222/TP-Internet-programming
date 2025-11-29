<template>
    <div class="newsletter-container">
        <div class="content-left">
            <h2>Don't miss amazing grocery deals</h2>
            <p>Sign up for the daily newsletter</p>
            <div class="email-form">
                <span class="input-wrapper">
                    <img src="./img/airplane.png" alt="" class="icon">
                    <input type="email" placeholder="Your email address">
                </span>
                <button class="subscribe-btn">
                    Subscribe
                </button>
            </div>
        </div>
        <div class="content-right">
            <img src="../public/img/apple.png" alt="" class="apple-image">
        </div>
    </div>
</template>

<style scoped>
.newsletter-container {
    position: relative;
    width: 100%;
    min-height: 500px;
    background-image: url('../public/img/bg-apple.png');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 4rem 6rem;
    overflow: hidden;
}

.content-left {
    flex: 1;
    max-width: 550px;
    z-index: 10;
}

.content-left h2 {
    font-size: 3.5rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 1rem;
    line-height: 1.2;
}

.content-left p {
    font-size: 1.25rem;
    color: #6b7280;
    margin-bottom: 2rem;
}

.email-form {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.input-wrapper {
    position: relative;
    flex: 1;
    display: flex;
    align-items: center;
    background: white;
    border-radius: 50px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 1rem 1.5rem;
}

.input-wrapper .icon {
    width: 20px;
    height: 20px;
    margin-right: 0.75rem;
}

.input-wrapper input {
    flex: 1;
    border: none;
    background: transparent;
    font-size: 1rem;
    color: #374151;
    outline: none;
}

.input-wrapper input::placeholder {
    color: #9ca3af;
}

.subscribe-btn {
    padding: 1rem 2rem;
    background: #10b981;
    color: white;
    font-weight: 600;
    border: none;
    border-radius: 50px;
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
    cursor: pointer;
    transition: all 0.2s;
    white-space: nowrap;
}

.subscribe-btn:hover {
    background: #059669;
    box-shadow: 0 6px 16px rgba(16, 185, 129, 0.4);
    transform: translateY(-2px);
}

.content-right {
    flex: 1;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    z-index: 10;
}

.apple-image {
    max-width: 450px;
    width: 100%;
    height: auto;
    object-fit: contain;
}

@media (max-width: 768px) {
    .newsletter-container {
        flex-direction: column;
        padding: 2rem;
        text-align: center;
    }
    
    .content-left {
        max-width: 100%;
        margin-bottom: 2rem;
    }
    
    .content-left h2 {
        font-size: 2.5rem;
    }
    
    .email-form {
        flex-direction: column;
    }
    
    .content-right {
        justify-content: center;
    }
    
    .apple-image {
        max-width: 300px;
    }
}
</style>

<script>
export default {
    name: 'GroceryNewsletter',
    data() {
        return {
            email: ''
        }
    },
    methods: {
        handleSubscribe() {
            if (this.email) {
                console.log('Subscribing email:', this.email);
                // Add your subscription logic here
            }
        }
    }
}
</script>