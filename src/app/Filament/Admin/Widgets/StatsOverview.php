<?php
namespace App\Filament\Admin\Widgets;

use Filament\Widgets\Widget;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\NewsletterSubscriber;
use App\Models\ContactMessage;

class StatsOverview extends Widget
{
    protected static string $view = 'filament.admin.widgets.stats-overview';

    protected function getViewData(): array
    {
        return [
            'userCount' => User::count(),
            'postCount' => Post::count(),
            'commentCount' => Comment::count(),
            'subscriberCount' => NewsletterSubscriber::where('status', 'subscribed')->count(),
            'contactCount' => ContactMessage::count(),
        ];
    }
}
