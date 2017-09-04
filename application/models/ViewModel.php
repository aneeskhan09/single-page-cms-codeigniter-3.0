<?php
class ViewModel extends CI_Model
{
    function get_data($table)
    {
        return $this->db->select('*')->get($table)->result();
    }
    /////////////////////////////////////////////
    function get_portfolio()
    {
        $this->db->select('*');
        $this->db->from('portfolio');
        $this->db->join('portfolio_category', 'portfolio.cat_id = portfolio_category.cat_id');
        $query = $this->db->get();
        return $query->result();
    }
    /////////////////////////////////////////////
    function get_team()
    {
        $this->db->select('*');
        $this->db->from('team');
        $this->db->join('social_links', 'team.member_id = social_links.member_id');
        $query = $this->db->get();
        return $query->result();
    }
}?>