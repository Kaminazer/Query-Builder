<?php

namespace Builder;

class QueryBuilder implements SqlBuilderInterface
{
    protected $select;
    protected $where;
    protected $table;
    protected $limit = null;
    protected $offset = null;
    protected $order = null;
    protected $sqlQuery;

    /**
     * @inheritDoc
     */
    public function select($columns): BuilderInterface
    {
        $columns = implode(',', $columns);
        $this->select = "SELECT $columns";
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function where($conditions): BuilderInterface
    {
        // TODO: Implement where() method.
        foreach ($conditions as $name => $value)
        {
            $condition = "$name = '$value'";
        }
        $this->where = "WHERE $condition";
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function table($table): BuilderInterface
    {
        // TODO: Implement table() method.
        $this->table = "FROM $table";
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function limit($limit): BuilderInterface
    {
        // TODO: Implement limit() method.
        $this->limit = "LIMIT $limit";
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function offset($offset): BuilderInterface
    {
        // TODO: Implement offset() method.
        $this->offset = "OFFSET $offset";
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function order($order): BuilderInterface
    {
        // TODO: Implement order() method.
        foreach ($order as $name => $value)
        {
            $orderValue = "$name $value";
        }
        $this->order = "ORDER BY $orderValue";
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSql(): string
    {
        return $this->sqlQuery = "$this->select $this->table $this->where $this->order $this->limit $this->offset";
    }
}