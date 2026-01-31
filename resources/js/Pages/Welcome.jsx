import { Head } from '@inertiajs/react';

export default function Welcome() {
    return (
        <>
            <Head title="Welcome" />
            <div className="flex items-center justify-center min-h-screen bg-gray-100 text-gray-900">
                <div className="text-center">
                    <h1 className="text-4xl font-bold mb-4">Welcome to XenoPHP + VITE</h1>
                    <p className="text-lg text-gray-600">Simple, Fast, and Secure.</p>
                </div>
            </div>
        </>
    );
}
