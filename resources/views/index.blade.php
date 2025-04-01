@extends('layouts.app')

@section('title', "Welcome to Dev Shah's Micro Private Equity Firm")
@section('description', "Discover how Dev Shah's firm helps individuals acquire small-scale online businesses for as low as $5,000 to $25,000.")
@section('keywords', "online business acquisition, micro private equity, small-scale investment, Dev Shah")

@section('content')
<div class="xoxo_fn_pages">
    <div class="xoxo_fn_page_ajax">
        <div class="xoxo_fn_index">

            <section id="value-proposition">
                <h2>Our Unique Value Proposition</h2>
                <p>We specialize in helping individuals acquire online businesses for as low as $5,000 to $25,000. Our firm is dedicated to making online business ownership accessible and profitable.</p>
            </section>

            <section id="about-dev-shah">
                <h2>About Dev Shah</h2>
                <p>Dev Shah is a seasoned entrepreneur with a passion for helping others succeed in the online business world. His approachable nature and expertise make him the perfect partner for your investment journey.</p>
            </section>

            <section id="how-it-works">
                <h2>How It Works</h2>
                <ol>
                    <li>Explore available businesses.</li>
                    <li>Consult with our experts.</li>
                    <li>Make an informed investment.</li>
                    <li>Grow your new business with our support.</li>
                </ol>
            </section>

            <section id="testimonials">
                <h2>Testimonials</h2>
                <p>"Working with Dev Shah was a game-changer for my investment portfolio. His insights and support were invaluable." - Happy Client</p>
            </section>

            <section id="contact">
                <h2>Contact Us</h2>
                <form action="/contact" method="post">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </section>

            <footer>
                <p>&copy; 2023 Dev Shah's Micro Private Equity Firm. All rights reserved.</p>
            </footer>
        </div>
    </div>
</div>
@endsection