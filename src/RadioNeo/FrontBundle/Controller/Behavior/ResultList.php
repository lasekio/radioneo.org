<?php

namespace RadioNeo\FrontBundle\Controller\Behavior;

use Doctrine\ODM\MongoDB\Query\Builder;

trait ResultList
{
    /**
     * Paginates results
     *
     * @param  QueryBuilder $queryBuilder Configured query builder that gets results
     * @return \Knp\Component\Pager\Pagination\AbstractPagination
     */
    protected function getPagination(Builder $queryBuilder, $defaultMaxResults = 10)
    {
        $paginator  = $this->get('knp_paginator');
        $request    = $this->getRequest();

        $pagination = $paginator->paginate(
            $queryBuilder,
            $request->query->get('page', 1),
            $defaultMaxResults
        );

        return $pagination;
    }
}
