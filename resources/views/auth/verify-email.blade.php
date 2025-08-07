<x-apartados-layout>
    <div class="container py-5 text-center">
        <h2>Verifica tu correo electrónico</h2>
        <p>Te hemos enviado un enlace de verificación a tu correo. Haz clic en el enlace para activar tu cuenta.</p>

        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                Se ha reenviado el enlace de verificación a tu correo.
            </div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-primary mt-3">Reenviar correo</button>
        </form>
    </div>
</x-apartados-layout>