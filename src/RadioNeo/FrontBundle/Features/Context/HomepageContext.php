<?php

namespace RadioNeo\FrontBundle\Features\Context;

use Behat\MinkExtension\Context\RawMinkContext;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Doctrine\ODM\MongoDB\DocumentManager;

use RadioNeo\DatabaseBundle\Document\Post;

/**
 * Defines application features from the specific context.
 */
class HomepageContext extends RawMinkContext implements Context, SnippetAcceptingContext
{
    protected $documentManager;

    protected $currentNode;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(DocumentManager $documentManager)
    {
        $this->documentManager = $documentManager;
    }

    /**
     * @Given there are posts:
     */
    public function thereArePosts(TableNode $table)
    {
        foreach ($table as $row) {
            $post = new Post();

            $post
                ->setTitle($row['title'])
                ->setBody($row['body'])
            ;

            $this->documentManager->persist($post);
        }

        $this->documentManager->flush();
    }

    /**
     * @When I scroll to the latest blog posts section
     */
    public function iScrollToTheLatestBlogPostsSection()
    {
        $container = $this->getSession()->getPage();
        $this->currentNode = $container->find('css', '#latest-posts');

        \PHPUnit_Framework_Assert::assertNotNull($this->currentNode);
    }

    /**
     * @Then I should see latest blog posts
     */
    public function iShouldSeeLatestBlogPosts()
    {
        $postElements = $this->currentNode->findAll('css', '.post');

        \PHPUnit_Framework_Assert::assertCount(3, $postElements);
    }
}
