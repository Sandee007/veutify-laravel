<template>
  <!-- <div> -->
    <!-- <v-app-bar 
      app
      color="blue"
      collapse-on-scroll=""
      dark
      :src="bg"
    > 

      <v-app-bar-nav-icon @click="drawer = !drawer" ></v-app-bar-nav-icon>

      <v-toolbar-title>
        <h1>Title</h1>
      </v-toolbar-title>

      <v-spacer></v-spacer>
      

      <v-btn rounded dark text > Sign out
        <v-icon right> mdi-exit-to-app </v-icon>
      </v-btn>

    </v-app-bar> -->
<v-app>
    <v-navigation-drawer
      
      class="blue"
      v-model="drawer"
      :permanent="permanent"
      src="bg"
      color="orange"
      dark
      width="380px"
      
    >
      <v-list tile >
        <v-list-item ripple exact-active-class
        v-for="(item,index) in dashboardItems"  :key="index"
        router :to="item.route"
        >

          <v-list-item-icon>
            <!-- <v-icon class="white--text">{{item.icon}}</v-icon> -->
            <i class="material-icons white--text">{{item.icon}}</i>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title class="white--text 8px" >{{item.text}}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

      </v-list>

      <v-list rounded >
      <v-list-group ripple 
        v-for="item in items"
        :key="item.title"
        v-model="item.active"
        :prepend-icon="item.action"
        no-action
      >
        <template v-slot:activator>
          <v-list-item-content>
            <v-list-item-title class="white--text" >{{item.title}}</v-list-item-title>
          </v-list-item-content>
        </template>

        <v-list-item
          v-for="subItem in item.items"
          :key="subItem.title"
          @click=""
        >
          <v-list-item-icon>
            <v-icon>forward</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title v-text="subItem.title"  >  
            </v-list-item-title>
          </v-list-item-content>

        </v-list-item>
      </v-list-group>
    </v-list>
    </v-navigation-drawer>
</v-app>
  <!-- </div> -->
  
</template>

<script>
export default {
  data() {
    return {
      drawer:true,
      permanent:true,
      background: true,
      dashboardItems: [
        // {text: 'Dashboard', icon: 'add', route: '/'},
        // {text: 'My Projects', icon: 'ac_unit', route: '/projects'},
        // {text: 'Team Members', icon: 'account_balance', route: '/team'},
      ],
      items: [
          {
            action: 'house',
            title: 'Home Branch',
            active:true,
            items: [
              // { title: 'List Item' },
            ],
          },
          {
            action: 'person',
            title: 'Borrowers',
            // active: true,
            items: [
              { title: 'View Borrowers' },
              { title: 'Add Borrowers' },
              { title: 'View Borrower Groups' },
              { title: 'Add Borrowers Groups' },
              { title: 'Send SMS to All Borrowers' },
              { title: 'Send Email to All Borrowers' },
              { title: 'Invite Borrowers' },
            ],
          },
          {
            action: 'local_atm',
            title: 'Loans',
            items: [
              { title: 'View All Loans' },
              { title: 'Add Loan' },
              { title: 'Due Loans' },
              { title: 'Missed Repayments' },
              { title: 'Loans in Arrears' },
              { title: 'No Repayments' },
              { title: 'Past Maturity Date' },
              { title: 'Principal Outstanding' },
              { title: '1 Month Late Loans' },
              { title: '3 Months Late Loans' },
              { title: 'Loan Calculator' },
              { title: 'Guarantors' },
              { title: 'Loan Comments' },
              { title: 'Approve Loans' },
            ],
          },
          {
            action: 'attach_money',
            title: 'Repayments',
            items: [
              { title: 'View Repayments' },
              { title: 'Add Bulk Repayments' },
              { title: 'Upload Repayments - CSV file' },
              { title: 'Repayments Charts' },
              { title: 'Approve Repayments' },
            ],
          },
          {
            action: 'toc',
            title: 'Collateral Register',
            items: [
              // { title: 'List Item' },
            ],
          },
          {
            action: 'today',
            title: 'Calendar',
            items: [
              // { title: 'List Item' },
            ],
          },
          {
            action: 'receipt_long',
            title: 'Collection Sheets',
            items: [
              { title: 'Daily Collection Sheet' },
              { title: 'Missed Repayments Sheet' },
              { title: 'Past Maturity Date Loans' },
              { title: 'Send SMS' },
              { title: 'Send Email' },
            ],
          },
          {
            action: 'account_tree',
            title: 'Saving Transactions',
            items: [
              { title: 'View Savings Transactions ' },
              { title: 'Add Bulk Transactions' },
              { title: 'Upload Transactions - CSV file' },
              { title: 'Staff Transactions Report' },
              { title: 'Approve Transactions' },
            ],
          },
          {
            action: 'person_add',
            title: 'Investors',
            items: [
              { title: 'View Investors' },
              { title: 'Add Investor' },
              { title: 'Send SMS to All Investors' },
              { title: 'Send Email to All Investors' },
              { title: 'Invite Investors' },
            ],
          },
          {
            action: 'contacts',
            title: 'Investor Accounts',
            items: [
              { title: 'View All Investor Accounts' },
              { title: 'Add Investor Account' },
              { title: 'View All Loan Investments' },
              { title: 'View Investor Transactions' },
              { title: 'Approve Loan Investments' },
            ],
          },
          {
            action: 'gavel',
            title: 'E-Signatures',
            items: [
              // { title: 'List Item' },
            ],
          },
          {
            action: 'payments',
            title: 'Payroll',
            items: [
              { title: 'View Payroll' },
              { title: 'Add payroll' },
              { title: 'Payroll Report' },
            ],
          },
          {
            action: 'redo',
            title: 'Expenses',
            items: [
              { title: 'View Expenses' },
              { title: 'Add Expense' },
            ],
          },
          {
            action: 'add',
            title: 'Other Income',
            items: [
              { title: 'View Other Income' },
              { title: 'Add Other Income' },
            ],
          },
          {
            action: 'business_center',
            title: 'Asset Management',
            items: [
              { title: 'View Asset Management' },
              { title: 'Add Asset Management' },
            ],
          },
          {
            action: 'insert_chart',
            title: 'Reports',
            items: [
              { title: 'Borrowers Report' },
              { title: 'Loan Report' },
              { title: 'Loan Arrears Aging Report' },
              { title: 'Collections Report' },
              { title: 'Collector Report(Staff)' },
              { title: 'Deferred Income' },
              { title: 'Deferred Income Monthly' },
              { title: 'Disbursement Report' },
              { title: 'Fees Report' },
              { title: 'Loan Officer Report' },
              { title: 'Loan Products Report' },
              { title: 'MFRS Rations' },
              { title: 'Monthly Report' },
              { title: 'Outstanding Report' },
              { title: 'Portfolio At Risk (PAR)' },
              { title: 'At a Glance Report' },
              { title: 'All Entries' },
            ],
          },
          {
            action: 'menu_book',
            title: 'Accounting',
            items: [
              { title: 'Cash flow Accumulated' },
              { title: 'Cash Flow Monthly' },
              { title: 'Cash Flow Projection' },
              { title: 'Profit / Loss' },
              { title: 'Balance Sheet' },
              { title: 'Accounting Integration' },
            ],
          },
        ],
    }
  },
  computed:{
    bg () {
      return this.background ? 'https://cdn.vuetifyjs.com/images/backgrounds/bg-2.jpg' : undefined
    }
  }
}
</script>

<style>

</style>