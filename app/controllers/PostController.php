<?php
/**
 * BreezeForum
 *
 * @package BreezeForum
 * @author Jessica González <suki@missallsunday.com>
 * @copyright Copyright 2013, Jessica González (http://missallsunday.com)
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */

/*
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * This software uses Lithium framework, Copyright 2013, Union of RAD (http://union-of-rad.org)
 *
 */

namespace app\controllers;

use app\models\Post;
use lithium\storage\Session;

class PostController extends \lithium\action\Controller
{
	public function index()
	{
		// Are we editing? recover the data at once!

		// If add sent the user back, collect the data and pass it over to the view

		// All the default checks here as usual

		// Render a nice form for adding a new post
	}

	public function add()
	{
		// Check the user and session and all that stuff

		if ($this->request->data)
		{
			// Call the model here and add the post
		}

		// No data huh? log it and send back to the index, tell the user what went wrong

		// Everything Went Better Than Expected
	}

	public function edit()
	{
		// Check, check checks!

		// Make sure this particular post do exists

		// It doesn't, log and fire an error page or something

		// It does, kudos for making it this far bu we still need to check for empty fields and that stuff
	}
}