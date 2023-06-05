<?php

namespace Builder;

class SqlQuery
{
    protected $select;
    protected $where;
    protected $table;
    protected $limit;
    protected $offset;
    protected $order;
    public $sqlQuery;
    public function __construct(SqlBuilderInterface $sqlBuilder)
    {
        $this->select = $sqlBuilder->getSelect();
        $this->where = $sqlBuilder->getWhere();
        $this->table = $sqlBuilder->getTable();
        $this->limit = $sqlBuilder->getLimit();
        $this->offset = $sqlBuilder->getOffset();
        $this->order = $sqlBuilder->getOrder();
        $this->sqlQuery = $sqlBuilder->getSqlQuery();
    }
}