<!-- resources/views/contact/form.blade.php -->

<h3 class="p-5">Contact</h3>

<div class="container text-center pb-5 border-bottom">
    <div class="col-6 mx-auto my-5">
        <p class="my-5 h3">Feel free to reach out with any questions or feedback!</p>
        <form action="{{ route('contact.submit') }}" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>

            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" name="subject" placeholder="Write the subject" required>
            </div>

            <div class="mb-3">
                <textarea class="form-control" name="message" rows="4" placeholder="Write Your Message" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send Email</button>
        </form>
    </div>
</div>
