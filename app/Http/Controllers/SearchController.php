<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Page;

class SearchController extends Controller
{
    public function ajaxSearch(Request $request)
    {
        // {
        //     "list": "<li><div class=\"item\"><div class=\"img_holder\" data-has-image=\"\" data-bg-img=\"\"><div class=\"overlay\">M</div><a href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/my-account/\" class=\"full_link\"></a></div><div class=\"title_holder\"><div class=\"fn__meta\"><p><span class=\"meta_item meta_date\"><img class=\"fn__svg \" src=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/wp-content/themes/xoxo/framework/svg/calendar.svg\" alt=\"svg\" />Feb 5</span></p></div><div class=\"title\"><h3 class=\"fn_title\"><a href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/my-account/\">My account</a></h3></div></div></div></li><li><div class=\"item\"><div class=\"img_holder\" data-has-image=\"\" data-bg-img=\"\"><div class=\"overlay\">C</div><a href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/cart/\" class=\"full_link\"></a></div><div class=\"title_holder\"><div class=\"fn__meta\"><p><span class=\"meta_item meta_date\"><img class=\"fn__svg \" src=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/wp-content/themes/xoxo/framework/svg/calendar.svg\" alt=\"svg\" />Feb 5</span></p></div><div class=\"title\"><h3 class=\"fn_title\"><a href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/cart/\">Cart</a></h3></div></div></div></li><li><div class=\"item\"><div class=\"img_holder\" data-has-image=\"\" data-bg-img=\"\"><div class=\"overlay\">S</div><a href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/sample-page/\" class=\"full_link\"></a></div><div class=\"title_holder\"><div class=\"fn__meta\"><p><span class=\"meta_item meta_date\"><img class=\"fn__svg \" src=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/wp-content/themes/xoxo/framework/svg/calendar.svg\" alt=\"svg\" />Feb 5</span></p></div><div class=\"title\"><h3 class=\"fn_title\"><a href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/sample-page/\">Sample Page</a></h3></div></div></div></li><li><div class=\"item\"><div class=\"img_holder\" data-has-image=\"\" data-bg-img=\"\"><div class=\"overlay\">C</div><a href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/contact-page/\" class=\"full_link\"></a></div><div class=\"title_holder\"><div class=\"fn__meta\"><p><span class=\"meta_item meta_date\"><img class=\"fn__svg \" src=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/wp-content/themes/xoxo/framework/svg/calendar.svg\" alt=\"svg\" />Jan 5</span></p></div><div class=\"title\"><h3 class=\"fn_title\"><a href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/contact-page/\">Contact Page</a></h3></div></div></div></li><li><div class=\"item\"><div class=\"img_holder\" data-has-image=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/wp-content/uploads/2023/01/photo_2023-02-05_11-39-45-150x150.jpg\" data-bg-img=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/wp-content/uploads/2023/01/photo_2023-02-05_11-39-45-150x150.jpg\"><a href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/leaving-san-francisco/\" class=\"full_link\"></a></div><div class=\"title_holder\"><div class=\"fn__meta\"><p><span class=\"meta_item meta_date\"><img class=\"fn__svg \" src=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/wp-content/themes/xoxo/framework/svg/calendar.svg\" alt=\"svg\" />Jan 5</span><span class=\"meta_item meta_category\"><a class=\" fn_last_category\" href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/category/travel/\">Travel</a></span></p></div><div class=\"title\"><h3 class=\"fn_title\"><a href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/leaving-san-francisco/\">Leaving San Francisco</a></h3></div></div></div></li><li><div class=\"item\"><div class=\"img_holder\" data-has-image=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/wp-content/uploads/2023/02/woman-gf912e5f0d_1920-150x150.jpg\" data-bg-img=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/wp-content/uploads/2023/02/woman-gf912e5f0d_1920-150x150.jpg\"><a href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/what-marriage-means-to-me/\" class=\"full_link\"></a></div><div class=\"title_holder\"><div class=\"fn__meta\"><p><span class=\"meta_item meta_date\"><img class=\"fn__svg \" src=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/wp-content/themes/xoxo/framework/svg/calendar.svg\" alt=\"svg\" />Jan 5</span><span class=\"meta_item meta_category\"><a class=\" fn_last_category\" href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/category/lifestyle/\">Lifestyle</a></span></p></div><div class=\"title\"><h3 class=\"fn_title\"><a href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/what-marriage-means-to-me/\">What Marriage Means to Me</a></h3></div></div></div></li>",
        //     "info": "<p>We have found 26 results.</p><form role=\"search\" method=\"get\" class=\"search-form\" action=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/\"><input type=\"hidden\" value=\"a\" name=\"s\" />\r\n\t\t\t\t\t <input type=\"hidden\" value=\"ajax\" name=\"from\" />\r\n\t\t\t\t\t <input type=\"submit\" class=\"submit_button\" value=\"See all Results\" />\r\n\t\t\t\t</form>"
        // }

        $text = $request->input('text');
        $titleFilter = $request->input('titleFilter');
        $postFilter = $request->input('postFilter');

        $pageResults = [];
        $postResults = [];
        $count = 0;

        if ($titleFilter) {
            $pageResults = Page::where('title', 'like', '%' . $text . '%')->get();
            $count += $pageResults->count();
        }

        if ($postFilter) {
            $postResults = Post::where('title', 'like', '%' . $text . '%')->get();
            $count += $postResults->count();
        }
        
        $list = '';
        $info = "<p>We have found " . $count . " results.</p>";
        
        if ($count > 0) {
            $info .= "<form role=\"search\" method=\"get\" class=\"search-form\" action=\"/search\"><input type=\"hidden\" value=\"a\" name=\"s\" />\r\n\t\t\t\t\t <input type=\"hidden\" value=\"ajax\" name=\"from\" />\r\n\t\t\t\t\t <input type=\"submit\" class=\"submit_button\" value=\"See all Results\" />\r\n\t\t\t\t</form>";
        }

        foreach ($pageResults as $result) {
            $list .= '
            <li>
                <div class="item">
                    <div class="img_holder" data-has-image="" data-bg-img="">
                        <div class="overlay">' . $result->title[0] . '</div>
                        <a href="' . $result->url . '" class="full_link"></a>
                    </div>
                    <div class="title_holder">
                        <div class="fn__meta">
                            <p>
                                <span class="meta_item meta_date"><img class="fn__svg " src="/svg/calendar.svg" alt="svg" />' . $result->created_at->format('M d') . '</span>
                            </p>
                        </div>
                        <div class="title">
                            <h3 class="fn_title"><a href="' . $result->url . '">' . $result->title . '</a></h3>
                        </div>
                    </div>
                </div>
            </li>';
        }

        foreach ($postResults as $result) {
            // <li><div class=\"item\"><div class=\"img_holder\" data-has-image=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/wp-content/uploads/2023/02/woman-gf912e5f0d_1920-150x150.jpg\" data-bg-img=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/wp-content/uploads/2023/02/woman-gf912e5f0d_1920-150x150.jpg\"><a href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/what-marriage-means-to-me/\" class=\"full_link\"></a></div><div class=\"title_holder\"><div class=\"fn__meta\"><p><span class=\"meta_item meta_date\"><img class=\"fn__svg \" src=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/wp-content/themes/xoxo/framework/svg/calendar.svg\" alt=\"svg\" />Jan 5</span><span class=\"meta_item meta_category\"><a class=\" fn_last_category\" href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/category/lifestyle/\">Lifestyle</a></span></p></div><div class=\"title\"><h3 class=\"fn_title\"><a href=\"https://frenify.com/work/envato/frenify/wp/xoxo/2/what-marriage-means-to-me/\">What Marriage Means to Me</a></h3></div></div></div></li>

            $list .= '
            <li>
                <div class="item">
                    <div class="img_holder" data-has-image="' . $result->image . '" data-bg-img="' . $result->image . '">
                        <a href="' . $result->link . '" class="full_link"></a>
                    </div>
                    <div class="title_holder">
                        <div class="fn__meta">
                            <p>
                                <span class="meta_item meta_date"><img class="fn__svg " src="/svg/calendar.svg" alt="svg" />' . $result->created_at->format('M d') . '</span>
                                <span class="meta_item meta_category"><a class=" fn_last_category" href="' . $result->category->link . '">' . $result->category->title . '</a></span>
                            </p>
                        </div>
                        <div class="title">
                            <h3 class="fn_title"><a href="' . $result->link . '">' . $result->title . '</a></h3>
                        </div>
                    </div>
                </div>
            </li>';
        }

        return response()->json([
            'list' => $list,
            'info' => $info,
        ]);
    }
}
