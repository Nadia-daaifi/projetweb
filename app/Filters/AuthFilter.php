<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Vérifier si l'utilisateur est connecté
        if (!session()->get('log')) {
            return redirect()->to(base_url('auth/login'))->with('error', 'You must log in to access this page.');
        }

        // Optionnel : Si des arguments sont passés, vérifiez les rôles
        if ($arguments) {
            $userType = session()->get('type'); // Obtenez le type d'utilisateur
            if (!in_array($userType, $arguments)) {
                return redirect()->to(base_url('/'))->with('error', 'Unauthorized access.');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Si l'utilisateur est connecté et tente d'accéder à une page publique, redirigez-le en fonction de son rôle
        if (session()->get('log')) {
            $userType = session()->get('type'); // Obtenez le type d'utilisateur

            switch ($userType) {
                case 'admin':
                    return redirect()->to(base_url('/admin'));
                case 'client':
                    return redirect()->to(base_url('/site/acceuil'));
                case 'coach':
                    return redirect()->to(base_url('/coach/dashboard'));
                default:
                    return redirect()->to(base_url('/'))->with('error', 'Unauthorized access.');
            }
        }
    }
}
