<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('/services')->group(function () {
    Route::get('', function () {
        return view('services');
    })->name('services');

    Route::get('/monitoryng', function () {
        return view('monitoring');
    })->name('services.monitoring');

    Route::get('/optimisation-and-conversion', function () {
        return view('optimisation-and-conversion');
    })->name('services.optimisation-and-conversion');

    Route::get('/maintain', function () {
        return view('maintain');
    })->name('services.maintain');

    Route::get('/data-science-and-analytics', function () {
        return view('data-science-and-analytics');
    })->name('services.data-science-and-analytics');

    Route::get('/support', function () {
        return view('support');
    })->name('services.support');
});

Route::prefix('/solutions')->group(function () {
    Route::get('', function () {
        return view('solutions.app');
    })->name('solutions');

    Route::get('/understand-the-market-landscape', function () {
        return view('solutions.stage1.understand-the-market-landscape');
    })->name('solutions.understand-the-market-landscape');

    Route::get('/understand-how-mobile-can-help-my-business', function () {
        return view('solutions.stage1.understand-how-mobile-can-help-my-business');
    })->name('solutions.understand-how-mobile-can-help-my-business');

    Route::get('/build-on-an-initial-idea', function () {
        return view('solutions.stage1.build-on-an-initial-idea');
    })->name('solutions.build-on-an-initial-idea');

    Route::get('/identify-the-right-technology-stacka', function () {
        return view('solutions.stage1.identify-the-right-technology-stack');
    })->name('solutions.identify-the-right-technology-stack');

    Route::get('/innovate-with-technology', function () {
        return view('solutions.stage1.innovate-with-technology');
    })->name('solutions.innovate-with-technology');

    Route::get('/visualise-my-product-idea', function () {
        return view('solutions.stage2.visualise-my-product-idea');
    })->name('solutions.visualise-my-product-idea');

    Route::get('/understand-user-interactions', function () {
        return view('solutions.stage2.understand-user-interactions');
    })->name('solutions.understand-user-interactions');

    Route::get('/understand-my-existing-code-base', function () {
        return view('solutions.stage2.understand-my-existing-code-base');
    })->name('solutions.understand-my-existing-code-base');

    Route::get('/test-design-concepts', function () {
        return view('solutions.stage2.test-design-concepts');
    })->name('solutions.test-design-concepts');

    Route::get('/integrate-mobile-and-web-apps-with-other-technology', function () {
        return view('solutions.stage2.integrate-mobile-and-web-apps-with-other-technology');
    })->name('solutions.integrate-mobile-and-web-apps-with-other-technology');

    Route::get('/fix-legacy-or-under-performing-products', function () {
        return view('solutions.stage2.fix-legacy-or-under-performing-products');
    })->name('solutions.fix-legacy-or-under-performing-products');

    Route::get('/develop-a-new-digital-product', function () {
        return view('solutions.stage2.develop-a-new-digital-product');
    })->name('solutions.develop-a-new-digital-product');

    Route::get('/design-a-new-digital-product', function () {
        return view('solutions.stage2.design-a-new-digital-product');
    })->name('solutions.design-a-new-digital-product');

    Route::get('/build-a-web-app', function () {
        return view('solutions.stage2.build-a-web-app');
    })->name('solutions.build-a-web-app');

    Route::get('/build-a-mobile-app', function () {
        return view('solutions.stage2.build-a-mobile-app');
    })->name('solutions.build-a-mobile-app');

    Route::get('/raise-the-profile-of-my-app', function () {
        return view('solutions.stage3.raise-the-profile-of-my-app');
    })->name('solutions.raise-the-profile-of-my-app');

    Route::get('/manage-my-app-reviews-and-ratings', function () {
        return view('solutions.stage3.manage-my-app-reviews-and-ratings');
    })->name('solutions.manage-my-app-reviews-and-ratings');

    Route::get('/improve-the-conversion-performance-of-my-app', function () {
        return view('solutions.stage3.improve-the-conversion-performance-of-my-app');
    })->name('solutions.improve-the-conversion-performance-of-my-app');

    Route::get('/get-featured-in-the-app-store', function () {
        return view('solutions.stage3.get-featured-in-the-app-store');
    })->name('solutions.get-featured-in-the-app-store');

    Route::get('/bolster-my-existing-in-house-teams', function () {
        return view('solutions.stage3.bolster-my-existing-in-house-teams');
    })->name('solutions.bolster-my-existing-in-house-teams');
});

Route::get('/design', function () {
    return view('design');
})->name('design');

Route::get('/api-integration', function () {
    return view('api-integration');
})->name('api-integration');

Route::get('/mobile-development', function () {
    return view('mobile-development');
})->name('mobile-development');

Route::get('/blockchain-development', function () {
    return view('blockchain-development');
})->name('blockchain-development');

Route::get('/web-development', function () {
    return view('web-development');
})->name('web-development');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/product-strategy', function () {
    return view('product-strategy');
})->name('product-strategy');

Route::get('/tehnology-strategy', function () {
    return view('tehnology-strategy');
})->name('tehnology-strategy');

Route::get('/innovation', function () {
    return view('innovation');
})->name('innovation');

Route::get('/digital-transformation', function () {
    return view('digital-transformation');
})->name('digital-transformation');

Route::get('/internet-of-things', function () {
    return view('internet-of-things');
})->name('internet-of-things');

Route::get('/cloud-consulting', function () {
    return view('cloud-consulting');
})->name('cloud-consulting');

Route::get('/neurorezonance', function () {
    return view('neurorezonance');
})->name('neurorezonance');

Route::get('/foundation', function () {
    return view('foundation');
})->name('foundation');

Route::get('/experience', function () {
    return view('experience');
})->name('experience');
