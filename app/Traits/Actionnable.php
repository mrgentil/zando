<?php


namespace App\Traits;


trait Actionnable
{
    private function canEdit(string $type)
    {
        $canEditProperty = auth()->user()->hasPermission($type);

        if (!$canEditProperty) {
            return false;
        }
        return true;
    }

    private function setFlash(string $message, string $type = 'success')
    {
        return [
            'message' => $message, 'alert-type' => $type
        ];
    }

    private function hasNoPermissionErrorMessage(string $message)
    {
        return $this->setFlash($message, 'error');
    }

    private function errorMessageFlash(string $message)
    {
        return $this->setFlash($message, 'error');
    }

    private function errorMessage()
    {
        return "Vous n'avez pas l'autorisation d'effectuer cette opération";
    }

    public function getUserMessage($username, $isBanned)
    {
        return $isBanned ? "L'utilisateur {$username} est débani avec succès" : "L'utilisateur {$username} est bani avec succès";
    }
}
