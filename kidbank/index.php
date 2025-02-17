<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kids BANK</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>

<body>
  <div class="navbar">
    <div class="nav-left">
      <h1>KIDS BANK</h1>
    </div>
    <div class="nav-right">
      <div class="nav-item">
        <a href="#">Home</a>
      </div>
      <div class="nav-item">
        <a href="#">Account &#9662;</a>
        <div class="dropdown-content">
          <div class="sub-dropdown">
            <a href="#">For Kids &#9656;</a>
            <div class="sub-dropdown-content">
              <a href="login.php">Login</a>
              <a href="login.php">Sign up</a>
            </div>
          </div>
          <div class="sub-dropdown">
            <a href="#">For Parents &#9656;</a>
            <div class="sub-dropdown-content">
              <a href="parent_login.php">Login</a>
              <a href="parent_login.php">Sign up</a>
            </div>
          </div>
          
        </div>
      </div>
      <div class="nav-item">
        <a href="#">Services &#9662;</a>
        <div class="dropdown-content">
          <a href="#se">Virtual Debit Card</a>
          <a href="#se">saving Account</a>
          <a href="#se">Parent Monitoring</a>
          <a href="#se">Donation</a>
        </div>
      </div>
      <div class="nav-item">
        <a href="#">Activities &#9662;</a>
        <div class="dropdown-content">
          
          <a href="#ac">Quiz</a>
          <a href="#ac">Games</a>
          <a href="#ac">Goal setting</a>
        </div>
      </div>
      <div class="nav-item">
        <a href="#abt">About Us</a>
      </div>
    </div>
  </div>

  <section class="home">
    <div class="main-sec">
      <div class="left">
        <p class="pet">Welcome to KidsBank!</p>
        <p class="mem">Start Your Financial Adventure Today!</p>
        
        <a href="contact.php"> <input  type="button" value="Contact Us" ></a>
      </div>

      <div class="right">
        <img style="width: 560px;"
          src="https://static.vecteezy.com/system/resources/previews/024/346/432/original/3d-cartoon-group-of-little-children-on-transparent-background-generative-ai-png.png"
          alt="">
      </div>
    </div>
  </section>

  <section class="service-sec" id="se">
    <div class="txt">
      <h1>Our Services</h1>
      
    </div>
    <div class="ser">
    <div class="card">
      <img src="card.jpg" alt="card" >
      <div class="card__content">
        <p class="card__title">DEBIT CARD</p>
        <p class="card__description">Our virtual debit card allows young account holders to make online transactions securely. It’s a convenient way for kids to learn financial responsibility while managing their spending within limits set by parents or guardians.</p>
        <button class="card__button"><a href="debitLogin.php">Learn More</a></button>
        
      </div>
    </div>

    <div class="card">
      <img src="savings.jpg" alt="savings">
      <div class="card__content">
        <p class="card__title">SAVING ACCOUNT</p>
        <p class="card__description">The Kids Bank Savings Account encourages children to develop healthy saving habits from an early age. With competitive interest rates, it’s an excellent platform for them to watch their savings grow over time.</p>
        <button class="card__button"><a href="Form.php">Learn More</a></button>
        
      </div>
    </div>

    <div class="card">
      <img src="parents.jpg" alt="parents">
      <div class="card__content">
        <p class="card__title">PARENT MONITORING</p>
        <p class="card__description">We understand that parents want to stay informed about their child’s financial activities. Our parent monitoring feature provides real-time updates on transactions, helping parents guide their children toward responsible money management.</p>
        <button class="card__button"><a href="parentmonitoring.php">Learn More</a></button>
        
      </div>
    </div>

    <div class="card">
      <img src="donate.jpg" alt="donate">
      <div class="card__content">
        <p class="card__title">DONATION</p>
        <p class="card__description">Teaching empathy and social responsibility is essential. Through our donation service, kids can contribute to charitable causes they care about. It’s a way to instill values and make a positive impact on the world.</p>
        <button class="card__button"><a href="donation.php">Learn More</a></button>
       
      </div>
    </div>
    </div>
  </section>

  
  <section class="read-sec" id="ac">
    <div class="txt">
      <h1>Activities</h1>
      
    </div>
    <div class="fl">
    
  <div class="flip-card">
    <div class="flip-card-inner">
        <div class="flip-card-front">
            <p class="title">Quiz</p>
            
        </div>
        <div class="flip-card-back">
            <p class="des">Quiz that teach important money management skills. These challenges might involve budgeting, saving for a specific purpose (like buying a toy), or tracking expenses. By participating, children learn practical financial concepts in an engaging manner.</p>
            <button class="cta">
              <span><a href="Quiz.php">Learn More</a></span>
              <svg width="15px" height="10px" viewBox="0 0 13 10">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
              </svg>
            </button>
        </div>
    </div>
</div>
<div class="flip-card">
  <div class="flip-card-inner">
      <div class="flip-card-front">
          <p class="title">GAMES</p>
          
      </div>
      <div class="flip-card-back">
          <p class="des">Learning about money doesn’t have to be dull! Our educational games make financial literacy enjoyable. From interactive quizzes to simulated spending scenarios, kids can enhance their understanding of concepts like interest, budgeting, and investment—all while having fun.</p>
          <button class="cta">
            <span><a href="games.php">Learn More</a></span>
            <svg width="15px" height="10px" viewBox="0 0 13 10">
              <path d="M1,5 L11,5"></path>
              <polyline points="8 1 12 5 8 9"></polyline>
            </svg>
          </button>
      </div>
  </div>
</div>
<div class="flip-card">
  <div class="flip-card-inner">
      <div class="flip-card-front">
          <p class="title">GOAL SET</p>
          
      </div>
      <div class="flip-card-back">
          <p class="des">Goal setting is a crucial life skill. Kids can create financial goals within our platform. Whether it’s saving for a new bicycle, contributing to a charity, or building an emergency fund, setting and achieving these goals fosters discipline and responsibility.</p>
          <button class="cta">
            <span><a href="goal.php">Learn More</a></span>
            <svg width="15px" height="10px" viewBox="0 0 13 10">
              <path d="M1,5 L11,5"></path>
              <polyline points="8 1 12 5 8 9"></polyline>
            </svg>
          </button>
      </div>
  </div>
</div>
</div>
  </section>

  <section class="client-sec" id="abt">
    <div class="about-heading">
      <h1>About Us</h1>
      
    </div>
    
    <div class="input-group">
      <input placeholder="Type here...." type="text" id="input-field">
      <button class="submit-button"><span>
        <a href="Chatbot.php">CHAT</a></span></button>
    </div>
    <div class="ab">
    <div class="cookie-card1" id="c1">
      <span class="title">Education First</span>
      <p class="description">We believe that learning about money should be engaging and accessible. Through interactive activities, games, and challenges, we equip kids with practical financial skills. <a href="games.php">Read</a>. </p>
    
  </div>
  <div class="cookie-card2" id="c2">
    <span class="title">Safe and Secure</span>
    <p class="description">Parents can trust us. Our platform ensures robust security measures, parental controls, and real-time monitoring. We prioritize your child’s safety as they explore the world of finance. <a href="Form.php">Read</a>. </p>
    
</div>
<div class="cookie-card3" id="c3">
  <span class="title">Values-Driven</span>
  <p class="description">Beyond dollars and cents, we emphasize values like empathy, responsibility, and giving back. Kids can learn about charitable giving and the impact they can make. <a href="donation.php">Read</a>. </p>
  
</div>
    </div>
  </section>

  <footer class="foot-sec">
    <div class="main-sec">
      
      <div class="box2">
        <h1>Kids Bank</h1>
        <div class="item">
          <a href="/">Home</a>
          <a href="/">Service</a>
          <a href="/">Activities</a>
          <a href="/">Privacy Policy</a>
          <a href="/">Contact Us</a>
        </div>
      </div>

      

      <div class="box3">
        <h1>Contact Us</h1>
        <div class="add">
          <p><i class="fa-regular fa-envelope"></i> Demo2024@gmail.com</p>
          <p><i class="fa-solid fa-phone"></i> +9999-9999-99</p>
          <p><i class="fa-solid fa-circle-check"></i> www.demo.com</p>
        </div>
      </div>
    </div>
    <div class="copy">
      <p>Copyright 2024 &copy; Design By <span>LMC Students</span></p>
    </div>
  </footer>

  <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

   
</body>

</php>