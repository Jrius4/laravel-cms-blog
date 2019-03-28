<?
namespace App\Views\Composers;

use Illuminate\View\View;

class NavigationComposer
{
    public function composer(View $view)
    {
        $this->composerCategories($view);
        $this->composerPopularPosts($view);
       
    }

  private function  composerCategories(View $view)
  {
      

  }

}