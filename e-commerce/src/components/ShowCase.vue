<template>
    <div class="showcase-container">
        <div class="content-left">
            <h2>Don't miss amazing<br>grocery deals</h2>
            <p>Sign up for the daily newsletter</p>
            <div class="email-form">
                <span class="input-wrapper">
                    <img src="/img/paper-plane.png" alt="plane icon" class="icon">
                    <input type="email" placeholder="Your email address" v-model="email">
                </span>
                <button class="subscribe-btn" @click="handleSubscribe">
                    Subscribe
                </button>
            </div>
        </div>
        <div class="content-right">
            <img src="/img/apple.jpg" alt="" class="apple-image">
        </div>
    </div>
</template>

<script>
export default {
    name: 'ShowcaseComponent',
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

<style scoped>

.showcase-container {
    position: relative;
    width: 100%;
    max-width: 100%;
    height: auto;
    background: #fde5c6;
    /* background-image: url('/img/bg-apple.jpg'); */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    padding: 3rem 3rem;
    overflow: hidden;
    border-radius: 12px;
    box-sizing: border-box;
}

.content-left {
    flex: 1;
    max-width: 550px;
    z-index: 10;
}

.content-left h2 {
    font-size: 3rem;
    font-weight: 700;
    color: #1e3a5f;
    margin-bottom: 1rem;
    line-height: 1.2;
    letter-spacing: -0.01em;
}

.content-left p {
    font-size: 1rem;
    color: #8b9199;
    margin-bottom: 2rem;
    font-weight: 400;
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
    flex-shrink: 0;
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
    max-width: 350px;
    width: 100%;
    height: auto;
    object-fit: contain;
    filter: drop-shadow(0 10px 30px rgba(0, 0, 0, 0.1));
}

@media (max-width: 768px) {
    .showcase-container {
        flex-direction: column;
        padding: 2rem;
        text-align: center;
    }
    
    .content-left {
        max-width: 100%;
        margin-bottom: 2rem;
    }
    
    .content-left h2 {
        font-size: 2rem;
    }
    
    .email-form {
        flex-direction: column;
    }
    
    .content-right {
        justify-content: center;
    }
    
    .apple-image {
        max-width: 250px;
    }
}
</style>